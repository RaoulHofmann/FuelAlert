<?php

namespace App\Command;

use App\Model\Rss;
use App\Service\ControllerService;
use Doctrine\ODM\MongoDB\DocumentManager;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

class FetchRssCommand extends Command
{
    /**
     * @var ControllerService
     */
    private $controllerService;
    
    /**
     * @var DocumentManager
     */
    private $documentManager;

    private const RSS_URL = "https://www.fuelwatch.wa.gov.au/fuelwatch/fuelWatchRSS";

    protected static $defaultName = 'app:rss:fetch';

    public function __construct(ControllerService $controllerService, DocumentManager $documentManager)
    {
        $this->controllerService = $controllerService;
        $this->documentManager = $documentManager;

        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setDescription('Deletes rejected and spam comments from the database')
            ->addOption('dry-run', null, InputOption::VALUE_NONE, 'Dry run')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        $content = file_get_contents(self::RSS_URL);
        $xml = simplexml_load_string($content);
     
        $xmlObject = $this->controllerService->deserialize($xml->asXML(), new Rss, "xml");
        
        $this->documentManager->persist($xmlObject->getChannel());
        $this->documentManager->flush();
        $this->documentManager->clear();

        $io->success(sprintf('Fetched "%d" data items from fuelwatch.', count($xmlObject->getChannel()->getItem())));

        return 0;
    }
}
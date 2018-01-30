<?php
namespace AppBundle\Command;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CrawlerCommand extends Command
{
    protected function configure()
    {

        $this
            ->setName('app:crawler-execute')
            ->setDescription('Creates a crawler from website.')
            ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'User Creator',
            '============',
            '',
        ]);
    }
}
<?php

namespace Aga\DocumentorBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class DocumentorCommand extends ContainerAwareCommand {

    protected function configure() 
    {
        $this->setName('documentation:create')
            ->setDescription('Create project documentation with phpDocumentor2');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output) 
    {
        // Set the source and the target folders
        $source = realpath(__DIR__ . '/../../../');
        $target = realpath(__DIR__ . '/../Resources/public');
        
        $output->writeln('Generating project documentation, please wait...');
        
        // Execute the the phpdoc binary
        $command = 'phpdoc -d ' . $source . ' -t ' . $target;
        exec($command);
        
        // Show further instructions
        $output->writeln("Run the following command to install assets app/console assets:");
        $output->writeln("app/console assets:install --symlink web");
    }
}
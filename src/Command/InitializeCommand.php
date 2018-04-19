namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CreateUserCommand extends Command
{
    protected function configure()
    {
        $this
          ->setName('two:initialize')
          ->addArgument('manifest', InputArgument::REQUIRED, 'URI of project manifest.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $manifest = $input->getArgument('manifest');
        $output->writeln('Initializing vendor directories from manifest: '. $manifest);
    }
}

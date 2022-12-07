<?php
namespace Storymap\Service\Form;

use Storymap\Form\ConfigForm;
use Interop\Container\ContainerInterface;
use Laminas\ServiceManager\Factory\FactoryInterface;

class ConfigFormFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $services, $requestedName, array $options = null)
    {
        $translator = $services->get('MvcTranslator');
        $form = new ConfigForm(null, $options);
        $form->setTranslator($translator);
        return $form;
    }
}

<?xml version="1.0" ?>

<container xmlns="http://symfony.com/schema/dic/services"
    xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
    xmlns:twig="http://symfony.com/schema/dic/twig"
    xsi:schemaLocation="http://symfony.com/schema/dic/services http://symfony.com/schema/dic/services/services-1.0.xsd
                        http://symfony.com/schema/dic/twig http://symfony.com/schema/dic/twig/twig-1.0.xsd">

    <twig:config auto-reload="true" autoescape="true" base-template-class="stdClass" cache="/tmp" charset="ISO-8859-1" debug="true" strict-variables="true">
        <twig:form>
            <twig:resource>MyBundle::form.html.twig</twig:resource>
        </twig:form>
        <twig:global key="foo" id="bar" type="service" />
        <twig:global key="baz">@@qux</twig:global>
        <twig:global key="pi">3.14</twig:global>
        <twig:path>path1</twig:path>
        <twig:path>path2</twig:path>
        <twig:path namespace="namespace">namespaced_path1</twig:path>
        <twig:path namespace="namespace">namespaced_path2</twig:path>
    </twig:config>
</container>

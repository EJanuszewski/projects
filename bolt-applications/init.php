<?php

namespace Bolt\Extension\EJanuszewski\BoltApplications;

if (isset($app)) {
    $app['extensions']->register(new Extension($app));
}

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerGi0Bw3C\App_KernelProductionContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGi0Bw3C/App_KernelProductionContainer.php') {
    touch(__DIR__.'/ContainerGi0Bw3C.legacy');

    return;
}

if (!\class_exists(App_KernelProductionContainer::class, false)) {
    \class_alias(\ContainerGi0Bw3C\App_KernelProductionContainer::class, App_KernelProductionContainer::class, false);
}

return new \ContainerGi0Bw3C\App_KernelProductionContainer([
    'container.build_hash' => 'Gi0Bw3C',
    'container.build_id' => 'b11ab2c0',
    'container.build_time' => 1650799518,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGi0Bw3C');
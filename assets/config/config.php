<?php

use Hanafalah\ModuleDistribution\{
    Models as ModuleDistributionModels,
    Commands as ModuleDistributionCommand,
    Contracts
};

return [
    'namespace' => 'Hanafalah\\ModuleDistribution',
    'app' => [
        'contracts' => [
            //ADD YOUR CONTRACTS HERE
        ]
    ],
    'libs' => [
        'model' => 'Models',
        'contract' => 'Contracts',
        'schema' => 'Schemas',
        'database' => 'Database',
        'data' => 'Data',
        'resource' => 'Resources',
        'migration' => '../assets/database/migrations'
    ],
    'database'                 => [
        'models'               => [
        ]
    ],
    'commands' => [
        ModuleDistributionCommand\InstallMakeCommand::class
    ]    
];

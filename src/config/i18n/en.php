<?php

return [
    // Misc
    'simplestats.nodatayet'     => 'No data yet',
    'simplestats.taberror'      => 'Something is wrong with tab handling...',
    'simplestats.loaderror'     => 'Load Error',
    'simplestats.loading'       => 'Loading...',

    // Tabs
    'simplestats.tabs.pagevisits'       => 'Page Visits',
    'simplestats.tabs.visitordevices'   => 'Visitor Devices',
    'simplestats.tabs.referers'         => 'Referers',
    'simplestats.tabs.information'      => 'Information',

    // Tables
    'simplestats.table.filter'      => 'Filter items...',
    'simplestats.table.uid'          => 'UID',
    'simplestats.table.pagetitle'          => 'Title',
    'simplestats.table.hits'          => 'Hits',
    'simplestats.table.popularity'          => 'Popularity',
    'simplestats.table.firstvisited'        => 'First Visited',
    'simplestats.table.lastvisited'         => 'Last Visited',

    // Disclaimer
    'simplestats.disclaimer.title'      => 'Disclaimer - Collecting Data',
    'simplestats.disclaimer.text'       =>
        'You are actively collecting stats : you have to know what you are doing, and be responsible.<br>
        You should know your legal obligations regarding personal data storage of your visitors, and their rights.<br>
        SimpleStats is free to use, and [according to its license] it doesn\'t come with any guarantees or legal advice whatsoever.<br>
        By using SimpleStats, you agree to the above statements.',
    'simplestats.disclaimer.dismiss'    => 'To dismiss this message : refer to the readme.',

    // Page Visits
    'simplestats.visits.visitsovertime'     => 'Visits over time',
    'simplestats.visits.pagevisitsovertime' => 'Page visits over time',
    'simplestats.visits.languagesovertime'     => 'Languages over time',
    'simplestats.visits.globallanguages'       => 'Global languages',
    'simplestats.visits.visitedpages'          => 'Visited Pages',



    // Charts
    'simplestats.charts.time'       => 'Time',
    'simplestats.charts.visits'     => 'Visits',
    'simplestats.charts.seconds'    => 'seconds',

    // Timeframe Utilities
    'simplestats.timeframe.week.name'        => 'Weekly',
    'simplestats.timeframe.week.singular'    => 'week',
    'simplestats.timeframe.week.plural'      => 'weeks',
    'simplestats.timeframe.month.name'       => 'Monthly',
    'simplestats.timeframe.month.singular'   => 'month',
    'simplestats.timeframe.month.plural'     => 'months',

    // Devices
    'simplestats.devices.graph.devices'         => 'Visitor Devices',
    'simplestats.devices.graph.engines'         => 'Browser Engines',
    'simplestats.devices.graph.oses'            => 'Operating Systems',
    'simplestats.devices.graph.devicehistory'   => 'Device types over time',
    'simplestats.devices.graph.devicehistory.y' => 'Visits per device type',
    'simplestats.devices.names.desktop'         => 'Desktop',
    'simplestats.devices.names.mobile'          => 'Mobile',
    'simplestats.devices.names.pda'             => 'PDA',
    'simplestats.devices.names.dect'            => 'Dect',
    'simplestats.devices.names.tablet'          => 'Tablet',
    'simplestats.devices.names.gaming'          => 'Gaming',
    'simplestats.devices.names.ereader'         => 'E-Reader',
    'simplestats.devices.names.media'           => 'Media',
    'simplestats.devices.names.headset'         => 'Headset',
    'simplestats.devices.names.watch'           => 'Watch',
    'simplestats.devices.names.emulator'        => 'Emulator',
    'simplestats.devices.names.television'      => 'TV',
    'simplestats.devices.names.monitor'         => 'Monitor',
    'simplestats.devices.names.camera'          => 'Camera',
    'simplestats.devices.names.printer'         => 'Printer',
    'simplestats.devices.names.signage'         => 'Signage',
    'simplestats.devices.names.whiteboard'      => 'Whiteboard',
    'simplestats.devices.names.devboard'        => 'devBoard',
    'simplestats.devices.names.inflight'        => 'Inflight',
    'simplestats.devices.names.appliance'       => 'Appliance',
    'simplestats.devices.names.gps'             => 'GPS',
    'simplestats.devices.names.car'             => 'Car',
    'simplestats.devices.names.pos'             => 'Pos',
    'simplestats.devices.names.bot'             => 'Bot',
    'simplestats.devices.names.projector'       => 'Projector',

    // Info Tab
    'simplestats.info.title'                            => 'Database',
    'simplestats.info.db.title'                         => 'Information',
    'simplestats.info.db.file'                          => 'Database File',
    'simplestats.info.db.size'                          => 'Database Size',
    'simplestats.info.db.dbversion'                     => 'Your Database Version',
    'simplestats.info.db.softwareversion'               => 'Software Database Version',
    'simplestats.info.db.versionhistory'                => 'Version History',
    'simplestats.info.db.noversion'                     => 'None!',
    'simplestats.info.db.versionless'                   => 'versionless',
    'simplestats.info.db.versionerror'                  => 'Unable to query: ',
    'simplestats.info.db.table.dbversion'               => 'Db version',
    'simplestats.info.db.table.usedsince'               => 'Used since',
    'simplestats.info.dbreqs.title'                     => 'Database Requirements',
    'simplestats.info.dbreqs.positive'                  => 'It looks like SimpleStats should run on your server. :)',
    'simplestats.info.dbreqs.negative'                  => 'Ouch ! Your server doesn\'t meet the requirements to run SimpleStats...',
    'simplestats.info.dbupdate.title'                   => 'Database Upgrades',
    'simplestats.info.dbupdate.isuptodate'              => 'Your database is up to date. &nbsp; :) ',
    'simplestats.info.dbupdate.refresh'                 => 'Refresh db info',
    'simplestats.info.dbupdate.go'                      => 'Upgrade database',
    'simplestats.info.dbupdate.isbackedup'              => 'I have backed up my database, or I don\'t care about backups.',
    'simplestats.info.dbupdate.result'                  => 'Upgrade Result',
    'simplestats.info.dbupdate.required'                => 'Upgrade required',
    'simplestats.info.dbupdate.requiredmsg'             => 'Your database needs to be upgraded.<br/>SimpleStats will not work until you\'ve done this.<br/>',
    'simplestats.info.config.title'                     => 'Configuration',
    'simplestats.info.config.tracking'                  => 'Tracking',
    'simplestats.info.config.tracking.periodname'       => 'Tracking period',
    'simplestats.info.config.tracking.periodsecs'       => 'Track unique users every',
    'simplestats.info.config.tracking.salted'           => 'Using custom salt',
    'simplestats.info.config.tracking.unsalted'         => 'UNSALTED!',
    'simplestats.info.config.tracking.unsaltedwarn'     => 'You are using SimpleStats unsalted, which is less secure. You can set it in your config.php.',
    'simplestats.info.config.tracking.features'         => 'Enabled Tracking Features',
    'simplestats.info.config.tracking.referrers'        => 'Site Referers',
    'simplestats.info.config.tracking.devices'          => 'Visitor Devices',
    'simplestats.info.config.tracking.visits'           => 'Page Visits',
    'simplestats.info.config.tracking.languages'        => 'Language Visits',
    'simplestats.info.config.tracking.ignore.roles'     => 'Ignored user roles (not tracked)',
    'simplestats.info.config.tracking.ignore.ids'       => 'Ignored page IDs (not tracked)',
    'simplestats.info.config.tracking.ignore.templates' => 'Ignored page templates (not tracked)',
    'simplestats.info.config.log.title'                 => 'Logging',
    'simplestats.info.config.log.file'                  => 'Log File',
    'simplestats.info.config.log.level'                 => 'Log Level',
    'simplestats.info.config.log.level.warnings'        => 'Warnings',
    'simplestats.info.config.log.level.verbose'         => 'Verbose',
    'simplestats.info.config.log.level.tracking'        => 'Tracking',
];

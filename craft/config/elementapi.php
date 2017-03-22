<?php
namespace Craft;

return [
    'endpoints' => [
        'api/search' => [
            'elementType' => 'Entry',
            'paginate' => false,
            'criteria' => [
                'section' => 'blog',
                'limit' => 1,
                'search' => (craft()->request->getParam('q')) ? 'title:'.'*'.craft()->request->getParam('q').'*'.' OR ' . 'blogSummary:'.'*'.craft()->request->getParam('q').'*' : ''
                ],
            'transformer' => function(EntryModel $entry) {
                return [
                    'title' => $entry->title,
                    'url' => $entry->url,
                ];
            },
        ],
    ]
];

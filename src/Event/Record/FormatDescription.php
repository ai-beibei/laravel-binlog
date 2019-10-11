<?php

namespace Telanflow\Binlog\Event\Record;

use Telanflow\Binlog\Constants\RecordTypeConst;
use Telanflow\Binlog\Event\EventInfo;
use Telanflow\Binlog\Event\EventRecord;

class FormatDescription extends EventRecord
{
    /**
     * @var int
     */
    protected $recordType = RecordTypeConst::FORMAT_DESCRIPTION;

    public function __construct(EventInfo $eventInfo)
    {
        parent::__construct($eventInfo);
    }

}

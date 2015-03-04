<?php
/**
 * This file is part of CSBill package.
 *
 * (c) 2013-2014 Pierre du Plessis <info@customscripts.co.za>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace CSBill\QuoteBundle\Model;

final class Graph
{
    const GRAPH = 'csbill_quote';

    const TRANSITION_NEW = 'new';
    const TRANSITION_SEND = 'send';
    const TRANSITION_CANCEL = 'cancel';
    const TRANSITION_DECLINE = 'decline';
    const TRANSITION_ACCEPT = 'accept';
    const TRANSITION_REOPEN = 'reopen';
    const TRANSITION_ARCHIVE = 'archive';

    const STATUS_DRAFT = 'draft';
    const STATUS_PENDING = 'pending';
    const STATUS_ACCEPTED = 'accepted';
    const STATUS_CANCELLED = 'cancelled';
    const STATUS_DECLINED = 'declined';
    const STATUS_ARCHIVED = 'archived';
}

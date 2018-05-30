<?php //-->
/**
 * This file is part of Cradle Webhook Package.
 */

/**
 * Creates a webhook
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('webhook-create', function ($request, $response) {
    //----------------------------//
    // 1. Get Data
    $data = [];
    if($request->hasStage()) {
        $data = $request->getStage();
    }

    //----------------------------//
    // 2. Prepare Data
    // set webhook as schema
    $request->setStage('schema', 'webhook');

    if (isset($data['webhook_events'])) {
        $request->setStage('webhook_events', json_encode($data['webhook_events']));
    }

    //----------------------------//
    // 3. Process Data
    // trigger model create
    $this->trigger('system-model-create', $request, $response);
});

/**
 * Creates a webhook
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('webhook-detail', function ($request, $response) {
    //----------------------------//
    // 1. Get Data
    // unnecessary move to get data
    //----------------------------//
    // 2. Prepare Data
    // set webhook as schema
    $request->setStage('schema', 'webhook');
    //----------------------------//
    // 3. Process Data
    // trigger model detail
    $this->trigger('system-model-detail', $request, $response);
});

/**
 * Removes a webhook
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('webhook-remove', function ($request, $response) {
    //----------------------------//
    // 1. Get Data
    // unnecessary move to get data
    //----------------------------//
    // 2. Prepare Data
    // set webhook as schema
    $request->setStage('schema', 'webhook');
    //----------------------------//
    // 3. Process Data
    // trigger model remove
    $this->trigger('system-model-remove', $request, $response);
});

/**
 * Restores a webhook
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('webhook-restore', function ($request, $response) {
    //----------------------------//
    // 1. Get Data
    // unnecessary move to get data
    //----------------------------//
    // 2. Prepare Data
    // set webhook as schema
    $request->setStage('schema', 'webhook');
    //----------------------------//
    // 3. Process Data
    // trigger model restore
    $this->trigger('system-model-restore', $request, $response);
});

/**
 * Searches webhook
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('webhook-search', function ($request, $response) {
    //----------------------------//
    // 1. Get Data
    // unnecessary move to get data
    //----------------------------//
    // 2. Prepare Data
    // set webhook as schema
    $request->setStage('schema', 'webhook');
    //----------------------------//
    // 3. Process Data
    // trigger model search
    $this->trigger('system-model-search', $request, $response);
});

/**
 * Updates a webhook
 *
 * @param Request $request
 * @param Response $response
 */
$this->on('webhook-update', function ($request, $response) {
    //----------------------------//
    // 1. Get Data
    $data = [];
    if($request->hasStage()) {
        $data = $request->getStage();
    }

    //----------------------------//
    // 2. Prepare Data
    // set webhook as schema
    $request->setStage('schema', 'webhook');

    if (isset($data['webhook_events'])) {
        $request->setStage('webhook_events', json_encode($data['webhook_events']));
    }

    //----------------------------//
    // 3. Process Data
    // trigger model update
    $this->trigger('system-model-update', $request, $response);
});

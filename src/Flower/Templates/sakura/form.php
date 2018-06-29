<?php
/**
 * Part of flower project.
 *
 * @copyright  Copyright (C) 2018 ${ORGANIZATION}.
 * @license    __LICENSE__
 */

?>
<?php $this->extend('_global.html'); ?>
<?php $this->block('content') ?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <div class="card bg-{{ $color }} text-light mt-5">
                <div class="card-body">
                    <h1>
                        Hello Sakura Form PHP Template
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->endblock() ?>

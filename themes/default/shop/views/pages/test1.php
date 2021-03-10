<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<style>
    body {
        margin-top: 20px;
        background-color: #f7f7fc;
    }

    .timeline {
        list-style-type: none;
        position: relative
    }

    .timeline:before {
        background: #dee2e6;
        left: 9px;
        width: 2px;
        height: 100%
    }

    .timeline-item:before,
    .timeline:before {
        content: " ";
        display: inline-block;
        position: absolute;
        z-index: 1
    }

    .timeline-item:before {
        background: #fff;
        border-radius: 50%;
        border: 3px solid #3b7ddd;
        left: 0;
        width: 20px;
        height: 20px
    }

    .card {
        margin-bottom: 24px;
        box-shadow: 0 0 0.875rem 0 rgba(33, 37, 41, .05);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: initial;
        border: 0 solid transparent;
        border-radius: .25rem;
    }

    .card-body {
        flex: 1 1 auto;
        padding: 1.25rem;
    }

    .card-header:first-child {
        border-radius: .25rem .25rem 0 0;
    }

    .card-header {
        border-bottom-width: 1px;
    }

    .pb-0 {
        padding-bottom: 0 !important;
    }

    .card-header {
        padding: 1rem 1.25rem;
        margin-bottom: 0;
        background-color: #fff;
        border-bottom: 0 solid transparent;
    }
</style>
<section class="page-contents">
    <div class="card-body">
        <table class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Company</th>
                    <th>Email</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($logistics as $logistic) {
                ?>


                    <tr>
                        <td><img src="https://bootdey.com/img/Content/avatar/avatar1.png" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                        <td> <?= $logistic->logistic_name; ?></td>
                        <td>Good Guys</td>
                        <td>garrett@winters.com</td>
                        <td><span class="badge bg-success">Active</span></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</section>
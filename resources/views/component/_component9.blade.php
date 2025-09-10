<?php
$pricingData = [
    [
        'title' => 'Diagnosing the Problem',
        'subtitle' => 'EMPATHY',
        'icon' => 'bi-heart',
        'description' => 'Define the main problem and identify its underlying causes',
        'features' => ['Situation Appraisal', 'Problem Analysis'],
    ],
    [
        'title' => 'Framing the Problem',
        'subtitle' => 'DEFINE',
        'icon' => 'bi-diagram-3',
        'description' => 'Develop a clear and specific problem statement',
        'features' => ['Fishbone Diagram'],
    ],
    [
        'title' => 'Finding Solutions',
        'subtitle' => 'IDEATE',
        'icon' => 'bi-lightbulb',
        'description' => 'Generate and select potential solutions',
        'features' => ['SCAMPER'],
    ],
    [
        'title' => 'Designing Solutions',
        'subtitle' => 'PROTOTYPE',
        'icon' => 'bi-gear',
        'description' => 'Develop detailed and actionable solution plans',
        'features' => ['Business Model Canvas'],
    ],
    [
        'title' => 'Selling Solutions',
        'subtitle' => 'TEST',
        'icon' => 'bi-megaphone',
        'description' => 'Communicate ideas concisely and persuasively',
        'features' => ['SCR Minto Exec-Summary'],
    ],
];
?>

<style>
    /* Supaya semua card sama tinggi */
    .pricing .single-item {
        display: flex;
    }

    .pricing-item {
        flex: 1;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        padding: 20px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    /* Icon Bootstrap lebih besar dan center */
    .pricing-icon {
        font-size: 3rem;
        color: #007bff;
        margin: 15px 0;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<div id="pricing" class="pricing-area default-padding-top bottom-less">
    <!-- Fixed Shape -->
    <div class="shape-top">
        <img src="{{ asset('source/assets/img/shape/9.png') }}" alt="Shape">
    </div>
    <!-- End Fixed Shape -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="site-heading light text-center">
                    <h2 class="area-title">SIMISI’s uniquely integrated Creative, Critical, and Structured Thinking</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="pricing text-center">
            <div class="row">
                <?php foreach ($pricingData as $item): ?>
                <div class="col-lg-4 col-md-6 single-item">
                    <div class="pricing-item">
                        <ul>
                            <li class="pricing-header">
                                <h4><?= $item['title'] ?></h4>
                                <h2><sup><?= $item['subtitle'] ?></sup></h2>
                            </li>
                            <!-- Icon -->
                            <li class="pricing-icon">
                                <i class="bi <?= $item['icon'] ?>"></i>
                            </li>
                            <li>
                                <p><?= $item['description'] ?></p>
                            </li>
                            <?php if (count($item['features']) > 1): ?>
                            <?php foreach ($item['features'] as $feature): ?>
                            <li><i class="fas fa-check-circle"></i> <?= $feature ?></li>
                            <?php endforeach; ?>
                            <?php else: ?>
                            <li>
                                <p style="text-align:center; font-weight:bold;">
                                    <?= $item['features'][0] ?>
                                </p>
                            </li>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

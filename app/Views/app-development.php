<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<?php
$waBase = 'https://wa.me/919753875213?text=';

$services = [
    [
        'id'    => 'android-app-development',
        'icon'  => 'fab fa-android',
        'color' => '#16A34A',
        'title' => 'Android App Development',
        'intro' => 'Native and modern Android applications built for the devices your customers actually use, from entry-level phones to the latest flagships.',
        'points' => [
            'Native Android apps using Kotlin and Java with Material Design guidelines',
            'Business, catalogue, booking, delivery and utility apps tailored to your workflow',
            'Integration with REST APIs, payment gateways, push notifications, maps and SMS/WhatsApp',
            'Offline-friendly design for areas with limited connectivity',
            'Play Store listing support, app signing, release builds and version updates',
        ],
    ],
    [
        'id'    => 'mobile-app-development',
        'icon'  => 'fa fa-mobile-alt',
        'color' => '#1D5EB8',
        'title' => 'Mobile App Development Services',
        'intro' => 'End-to-end mobile development services for businesses that want to reach customers on both Android and iOS without duplicating effort.',
        'points' => [
            'Cross-platform mobile apps (Flutter / React Native) from a single code base',
            'UI/UX design, interactive prototypes and user-flow planning',
            'Secure login, user profiles, in-app enquiries and order management',
            'Admin dashboards so your team can manage app content without a developer',
            'Testing on multiple screen sizes and OS versions before launch',
        ],
    ],
    [
        'id'    => 'software-application-development',
        'icon'  => 'fa fa-laptop-code',
        'color' => '#7C3AED',
        'title' => 'Software &amp; Application Development',
        'intro' => 'Custom software for small and growing businesses: tools that replace spreadsheets, paperwork and repetitive manual work.',
        'points' => [
            'Custom web applications and business management software',
            'Inventory, billing, CRM, enquiry-tracking and reporting systems',
            'Business websites and e-commerce / catalogue platforms (PHP, CodeIgniter, Laravel, MySQL)',
            'API development and third-party system integration',
            'Data migration, automation scripts and admin panels',
        ],
    ],
    [
        'id'    => 'maintenance-support',
        'icon'  => 'fa fa-tools',
        'color' => '#D97706',
        'title' => 'Maintenance, Hosting &amp; Support',
        'intro' => 'Software is never "done". We help keep your apps and websites secure, fast and up to date after launch.',
        'points' => [
            'Bug fixing, performance tuning and feature enhancements',
            'Server setup, deployment, backups and security updates',
            'Android/iOS version compatibility updates',
            'Documentation and hand-over so you always own your product',
            'Clear communication on WhatsApp, phone and email',
        ],
    ],
];

$process = [
    ['Discover', 'We listen to your business needs, users and goals, and agree on scope, timeline and budget in writing.', 'fa-comments'],
    ['Design', 'Wireframes and screen designs are shared for your feedback before any code is written.', 'fa-pencil-ruler'],
    ['Develop', 'Development in small milestones so you can see real progress and give feedback early.', 'fa-code'],
    ['Test &amp; Launch', 'Functional, device and security testing, then deployment to the Play Store, App Store or your server.', 'fa-rocket'],
    ['Support', 'Post-launch maintenance, updates and training so your team is comfortable using the product.', 'fa-headset'],
];

$tech = ['Kotlin', 'Java', 'Flutter', 'React Native', 'PHP', 'CodeIgniter', 'Laravel', 'JavaScript', 'MySQL', 'REST APIs', 'Firebase', 'HTML5 / CSS3'];
?>
<main class="main">
    <div class="page-header page-header-bg text-left" style="background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%); padding: 65px 0; border-bottom: 4px solid #1D5EB8;">
        <div class="container">
            <h1 class="text-white font-weight-bold mb-2" style="font-family: 'Urbanist', sans-serif; font-size: 2.8rem; font-weight: 800;">Software &amp; App Development</h1>
            <p class="font-weight-semibold mb-0" style="font-family: 'Albert Sans', sans-serif; font-size: 1.2rem; letter-spacing: 0.6px; color: #93C5FD !important;">Android apps, mobile development and custom software by Kagzi Ventures, Indore</p>
        </div>
    </div>

    <nav aria-label="breadcrumb" class="breadcrumb-nav mb-4" style="background: #F8FAFC; border-bottom: 1px solid #E2E8F0;">
        <div class="container">
            <ol class="breadcrumb py-3 mb-0" style="background: transparent;">
                <li class="breadcrumb-item"><a href="<?= base_url('/') ?>" style="color: #1D5EB8; font-weight: 600;"><i class="icon-home mr-1"></i> Home</a></li>
                <li class="breadcrumb-item active text-dark font-weight-semibold" aria-current="page">Software &amp; App Development</li>
            </ol>
        </div>
    </nav>

    <div class="pb-5">
        <div class="container">

            <!-- Overview -->
            <div class="row align-items-center mb-5">
                <div class="col-lg-7">
                    <span class="badge badge-primary px-3 py-2 text-uppercase mb-3 font-weight-bold d-inline-block" style="background: linear-gradient(135deg, #1D5EB8 0%, #154890 100%); color: #fff; font-size: 0.9rem; letter-spacing: 1px; border-radius: 20px; border: 1px solid #C5A059;">
                        Technology Services
                    </span>
                    <h2 class="font-weight-bold mb-3" style="font-family: 'Urbanist', sans-serif; font-size: 2.3rem; font-weight: 800; line-height: 1.25; color: #0F172A;">
                        Building apps and software that help businesses grow
                    </h2>
                    <p class="text-muted" style="font-size: 1.05rem; line-height: 1.8;">
                        Alongside our storage, gifting and utility products business, <strong>Kagzi Ventures</strong> is also an
                        <strong>Android app development, mobile development and software application development</strong> organization
                        based in Indore, Madhya Pradesh, India. We design, build and maintain digital products for retailers,
                        service providers, start-ups and growing companies.
                    </p>
                    <p class="text-muted mb-4" style="font-size: 1.05rem; line-height: 1.8;">
                        Our experience running a product business ourselves means we understand real operating needs, such as
                        catalogues, enquiries, orders, inventory and customer communication, and we build software that fits those needs
                        rather than forcing you into a generic template.
                    </p>
                    <a href="<?= $waBase . rawurlencode('Hi Kagzi Ventures, I would like to discuss an app / software development project.') ?>" target="_blank" rel="noopener" class="btn btn-success font-weight-bold mr-2 mb-2" style="background:#25D366; border-color:#25D366;">
                        <i class="fab fa-whatsapp mr-1"></i> Discuss Your Project
                    </a>
                    <a href="<?= base_url('contact') ?>" class="btn btn-outline-primary font-weight-bold mb-2">
                        <i class="fa fa-envelope mr-1"></i> Contact Us
                    </a>
                </div>
                <div class="col-lg-5 mt-4 mt-lg-0">
                    <div class="p-4 text-white" style="border-radius: 14px; background: linear-gradient(135deg, #1D5EB8 0%, #154890 100%); box-shadow: 0 8px 24px rgba(29,94,184,0.25);">
                        <h4 class="text-white font-weight-bold mb-3" style="font-family: 'Urbanist', sans-serif;">What we offer</h4>
                        <ul class="list-unstyled mb-0" style="line-height: 2;">
                            <?php foreach ($services as $s): ?>
                                <li><a href="#<?= $s['id'] ?>" class="text-white"><i class="<?= $s['icon'] ?> mr-2" style="width:20px; color:#FDE047;"></i><?= $s['title'] ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Service sections -->
            <?php foreach ($services as $s): ?>
                <section id="<?= $s['id'] ?>" class="mb-4" style="scroll-margin-top: 90px;">
                    <div class="card border-0" style="border-radius: 14px; border: 1px solid #E2E8F0 !important; box-shadow: 0 4px 14px rgba(0,0,0,0.04);">
                        <div class="card-body p-4">
                            <div class="row">
                                <div class="col-md-4 mb-3 mb-md-0">
                                    <div class="d-flex align-items-center justify-content-center text-white mb-3" style="width:58px; height:58px; border-radius:50%; background: <?= $s['color'] ?>;">
                                        <i class="<?= $s['icon'] ?>" style="font-size: 26px;"></i>
                                    </div>
                                    <h3 class="font-weight-bold" style="font-family: 'Urbanist', sans-serif; font-size: 1.6rem; font-weight: 800; color: #0F172A;"><?= $s['title'] ?></h3>
                                    <p class="text-muted mb-0" style="line-height: 1.7;"><?= $s['intro'] ?></p>
                                </div>
                                <div class="col-md-8">
                                    <ul class="list-unstyled mb-0">
                                        <?php foreach ($s['points'] as $pt): ?>
                                            <li class="d-flex mb-2" style="line-height: 1.6;">
                                                <i class="fa fa-check-circle mr-2 mt-1" style="color: <?= $s['color'] ?>;"></i>
                                                <span class="text-dark"><?= $pt ?></span>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endforeach; ?>

            <!-- Process -->
            <div class="text-center mt-5 mb-4">
                <span class="text-uppercase font-weight-bold" style="color:#1D5EB8; letter-spacing:1px; font-size:0.9rem;">How we work</span>
                <h3 class="font-weight-bold mt-1" style="font-family: 'Urbanist', sans-serif; font-size: 2rem; font-weight: 800; color:#0F172A;">Our Development Process</h3>
            </div>
            <div class="row justify-content-center mb-5">
                <?php foreach ($process as $i => $p): ?>
                    <div class="col-lg col-md-4 col-6 mb-3">
                        <div class="h-100 text-center p-3 bg-white" style="border-radius: 12px; border: 1px solid #E2E8F0;">
                            <div class="mx-auto mb-2 d-flex align-items-center justify-content-center text-white font-weight-bold" style="width:42px; height:42px; border-radius:50%; background: linear-gradient(135deg,#1D5EB8,#154890);"><?= $i + 1 ?></div>
                            <h5 class="font-weight-bold" style="font-family:'Urbanist',sans-serif; font-size:1.05rem;"><?= $p[0] ?></h5>
                            <p class="text-muted mb-0 small" style="line-height:1.55;"><?= $p[1] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Technologies -->
            <div class="text-center mb-5">
                <h4 class="font-weight-bold mb-3" style="font-family:'Urbanist',sans-serif; color:#0F172A;">Technologies We Work With</h4>
                <?php foreach ($tech as $t): ?>
                    <span class="d-inline-block px-3 py-1 m-1 font-weight-semibold" style="background:#EFF6FF; color:#1D5EB8; border:1px solid #BFDBFE; border-radius:20px; font-size:0.9rem;"><?= $t ?></span>
                <?php endforeach; ?>
            </div>

            <!-- Why us -->
            <div class="row mb-5">
                <?php
                $why = [
                    ['fa-handshake', 'Transparent &amp; Honest', 'Written scope, clear timelines and straightforward pricing. No hidden charges.'],
                    ['fa-map-marker-alt', 'Local Team in Indore', 'Meet us, call us or message us on WhatsApp. We are reachable and accountable.'],
                    ['fa-shield-alt', 'Secure &amp; Maintainable', 'Clean, documented code with data-privacy practices in line with Indian IT laws.'],
                ];
                foreach ($why as $w): ?>
                    <div class="col-md-4 mb-3">
                        <div class="h-100 p-4 text-center bg-white" style="border-radius:12px; border:1px solid #E2E8F0;">
                            <i class="fa <?= $w[0] ?> mb-3" style="font-size:2rem; color:#1D5EB8;"></i>
                            <h5 class="font-weight-bold" style="font-family:'Urbanist',sans-serif;"><?= $w[1] ?></h5>
                            <p class="text-muted mb-0"><?= $w[2] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- CTA -->
            <div class="text-center text-white p-5 position-relative overflow-hidden" style="border-radius:16px; background: linear-gradient(135deg, #0F172A 0%, #1E293B 100%); border-bottom: 4px solid #C5A059;">
                <h3 class="text-white font-weight-bold mb-2" style="font-family:'Urbanist',sans-serif; font-size:2rem; font-weight:800;">Have an app or software idea?</h3>
                <p class="mb-4" style="color:#CBD5E1; font-size:1.05rem;">Tell us what you need and we will get back to you with a plan, timeline and quote.</p>
                <a href="<?= $waBase . rawurlencode('Hi Kagzi Ventures, I would like a quote for app / software development.') ?>" target="_blank" rel="noopener" class="btn btn-success font-weight-bold mr-2 mb-2" style="background:#25D366; border-color:#25D366;"><i class="fab fa-whatsapp mr-1"></i> WhatsApp +91 97538 75213</a>
                <a href="mailto:info@kagziventures.in?subject=App%20%2F%20Software%20Development%20Enquiry" class="btn btn-light font-weight-bold mb-2"><i class="fa fa-envelope mr-1"></i> info@kagziventures.in</a>
                <p class="mb-0 mt-3 small" style="color:#94A3B8;">Kagzi Ventures &bull; 822 Flat No.7 Khatiwala Tank, Indore, Madhya Pradesh 452014, India</p>
            </div>
        </div>
    </div>
</main>
<?= $this->endSection() ?>

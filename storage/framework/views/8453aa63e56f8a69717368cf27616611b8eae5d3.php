<header class="header">
    <div class="container">
        <div class="row align-items-center position-relative">
            <div class="col-lg-2 col-6">
                <a href="<?php echo e(env ('APP_URL')); ?>" class="header-logo">
                    <img src="<?php echo e(getLogoUrl()); ?>" title="<?php echo e(env('APP_NAME')); ?>" alt="<?php echo e(env('APP_NAME')); ?>" class="img-fluid new-logo-image" />
                </a>
            </div>
            <div class="col-lg-8 col-1">
                <nav class="navbar navbar-expand-lg navbar-light justify-content-end" itemscope itemtype="https://www.schema.org/SiteNavigationElement">
                    <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item" itemprop="name">
                                <a class="nav-link active px-3" aria-current="page" href="<?php echo e(env ('APP_URL')); ?>" itemprop="url"><?php echo e(__('auth.home')); ?></a>
                            </li>
                            <li class="nav-item px-3" itemprop="name">
                                <a class="nav-link" href="<?php echo e(env ('APP_URL')); ?>#features" itemprop="url"><?php echo e(__('auth.features')); ?></a>
                            </li>
                            <li class="nav-item px-3" itemprop="name">
                                <a class="nav-link" href="<?php echo e(env ('APP_URL')); ?>#about" itemprop="url"><?php echo e(__('auth.about')); ?></a>
                            </li>
                            <li class="nav-item px-3" itemprop="name">
                                <a class="nav-link" href="<?php echo e(env ('APP_URL')); ?>#pricing" itemprop="url"><?php echo e(__('auth.pricing')); ?></a>
                            </li>
                            <li class="nav-item px-3" itemprop="name">
                                <a class="nav-link" href="<?php echo e(env ('APP_URL')); ?>#contact" itemprop="url"><?php echo e(__('auth.contact')); ?></a>
                            </li>
                            <li class="nav-item px-3" itemprop="name">
                                <a class="nav-link" href="<?php echo e(env('APP_PLAYSTORE')); ?>" target="_blank" rel="nofollow noreferrer noopener" itemprop="url"><?php echo e(__('Playstore')); ?></a>
                            </li>
                            
                            <li class="nav-item px-3">
                                <?php
                                $styleCss = 'style';
                                ?>
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="javascript:void(0)" role="button" id="languageDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="fa fa-language"></i>
                                    </a>
                                    <ul class="dropdown-menu" <?php echo e($styleCss); ?>="min-width: 200px" aria-labelledby="languageDropdown">
                                        <?php $__currentLoopData = getAllLanguage(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <li class="languageSelection <?php echo e((checkFrontLanguageSession() == $key) ? 'active' : ''); ?>" data-prefix-value="<?php echo e($key); ?>" <?php echo e($styleCss); ?>="max-height: 40px">
                                            <a class="dropdown-item <?php echo e((checkFrontLanguageSession() == $key) ? 'active' : ''); ?>" href="javascript:void(0)"><?php echo e($value); ?></a>
                                        </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="col-lg-2 col-3 text-end header-btn">
                <?php if(empty(getLogInUser())): ?>
                <a class="btn btn-primary nav-btn" href="<?php echo e(route('login')); ?>">
                    <?php echo e(__('auth.sign_in')); ?>

                </a>
                <?php else: ?>
                <?php if(getLogInUser()->hasrole('admin') || getLogInUser()->hasrole('user')): ?>
                <a class="btn btn-primary nav-btn" href="<?php echo e(route('admin.dashboard')); ?>">
                    <?php echo e(__('messages.dashboard')); ?>

                </a>
                <?php endif; ?>
                <?php if(getLogInUser()->hasrole('super_admin')): ?>
                <a class="btn btn-primary nav-btn" href="<?php echo e(route('sadmin.dashboard')); ?>">
                    <?php echo e(__('messages.dashboard')); ?>

                </a>
                <?php endif; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header><?php /**PATH /home/maystudi/cardlyn.com/resources/views/front/layouts/header.blade.php ENDPATH**/ ?>
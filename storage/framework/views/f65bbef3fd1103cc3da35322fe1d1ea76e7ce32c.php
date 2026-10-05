<?php if(auth()->check() && auth()->user()->hasRole(App\Models\Role::ROLE_SUPER_ADMIN)): ?>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('sadmin/dashboard*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('sadmin/dashboard*') ? 'active' : ''); ?>"
  href="<?php echo e(route('sadmin.dashboard')); ?>"><?php echo e(__('messages.dashboard')); ?></a>
</li>


<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('sadmin/users*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('sadmin/users*') ? 'active' : ''); ?>"
  href="<?php echo e(route('users.index')); ?>"><?php echo e(__('messages.users')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('sadmin/vcards*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('sadmin/vcards*') ? 'active' : ''); ?>"
  href="<?php echo e(route('sadmin.vcards.index')); ?>"><?php echo e(__('messages.vcards')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('sadmin/templates*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('sadmin/templates*') ? 'active' : ''); ?>"
  href="<?php echo e(route('sadmin.templates.index')); ?>"><?php echo e(__('messages.vcard.template')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('sadmin/planSubscription*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('sadmin/planSubscription*') ? 'active' : ''); ?>"
  href="<?php echo e(route('subscription.cash')); ?>"><?php echo e(__('messages.cash_payment')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('sadmin/subscribedPlan*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('sadmin/subscribedPlan*') ? 'active' : ''); ?>"
  href="<?php echo e(route('subscription.user.plan')); ?>"><?php echo e(__('messages.subscribed_user')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('sadmin/plans*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('sadmin/plans*') ? 'active' : ''); ?>"
  href="<?php echo e(route('plans.index')); ?>"><?php echo e(__('messages.plans')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('sadmin/currencies*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('sadmin/currencies*') ? 'active' : ''); ?>"
  href="<?php echo e(route('currencies.index')); ?>"><?php echo e(__('messages.currency.currencies')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0
<?php echo e(!Request::is('sadmin/countries*', 'sadmin/states*', 'sadmin/cities*') ? 'd-none' : ''); ?>">
<a class="nav-link p-0 <?php echo e(Request::is('sadmin/countries*') ? 'active' : ''); ?>"
href="<?php echo e(route('countries.index')); ?>"><?php echo e(__('messages.country.countries')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0
<?php echo e(!Request::is('sadmin/countries*', 'sadmin/states*', 'sadmin/cities*') ? 'd-none' : ''); ?>">
<a class="nav-link p-0 <?php echo e(Request::is('sadmin/states*') ? 'active' : ''); ?>"
href="<?php echo e(route('states.index')); ?>"><?php echo e(__('messages.state.states')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0
<?php echo e(!Request::is('sadmin/countries*', 'sadmin/states*', 'sadmin/cities*') ? 'd-none' : ''); ?>">
<a class="nav-link p-0 <?php echo e(Request::is('sadmin/cities*') ? 'active' : ''); ?>"
href="<?php echo e(route('cities.index')); ?>"><?php echo e(__('messages.city.cities')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('sadmin/languages*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('sadmin/languages*') ? 'active' : ''); ?>"
  href="<?php echo e(route('languages.index')); ?>"><?php echo e(__('messages.languages.languages')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('sadmin/settings*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('sadmin/settings*') ? 'active' : ''); ?>"
  href="<?php echo e(route('setting.index')); ?>"><?php echo e(__('messages.settings')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0
<?php echo e(!Request::is('sadmin/front-cms*', 'sadmin/email-subscription*', 'sadmin/features*',
'sadmin/about-us*', 'sadmin/frontTestimonial*', 'sadmin/contactUs*') ? 'd-none' : ''); ?>">
<a class="nav-link p-0 <?php echo e(Request::is('sadmin/front-cms*') ? 'active' : ''); ?>"
href="<?php echo e(route('setting.front.cms')); ?>"><?php echo e(__('messages.front_cms.front_cms')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0
<?php echo e(!Request::is('sadmin/front-cms*', 'sadmin/email-subscription*', 'sadmin/features*',
'sadmin/about-us*', 'sadmin/frontTestimonial*', 'sadmin/contactUs*') ? 'd-none' : ''); ?>">
<a class="nav-link p-0 <?php echo e(Request::is('sadmin/email-subscription*') ? 'active' : ''); ?>"
href="<?php echo e(route('email.sub.index')); ?>"><?php echo e(__('messages.subscriptions')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0
<?php echo e(!Request::is('sadmin/front-cms*', 'sadmin/email-subscription*', 'sadmin/features*',
'sadmin/about-us*', 'sadmin/frontTestimonial*', 'sadmin/contactUs*') ? 'd-none' : ''); ?>">
<a class="nav-link p-0 <?php echo e(Request::is('sadmin/features*') ? 'active' : ''); ?>"
href="<?php echo e(route('features.index')); ?>"><?php echo e(__('messages.features')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0
<?php echo e(!Request::is('sadmin/front-cms*', 'sadmin/email-subscription*', 'sadmin/features*',
'sadmin/about-us*', 'sadmin/frontTestimonial*', 'sadmin/contactUs*') ? 'd-none' : ''); ?>">
<a class="nav-link p-0 <?php echo e(Request::is('sadmin/about-us*') ? 'active' : ''); ?>"
href="<?php echo e(route('aboutUs.index')); ?>"><?php echo e(__('messages.about_us.about_us')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0
<?php echo e(!Request::is('sadmin/front-cms*', 'sadmin/email-subscription*', 'sadmin/features*',
'sadmin/about-us*', 'sadmin/frontTestimonial*', 'sadmin/contactUs*') ? 'd-none' : ''); ?>">
<a class="nav-link p-0 <?php echo e(Request::is('sadmin/frontTestimonial*') ? 'active' : ''); ?>"
href="<?php echo e(route('frontTestimonials.index')); ?>"><?php echo e(__('messages.vcard.testimonials')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0
<?php echo e(!Request::is('sadmin/front-cms*', 'sadmin/email-subscription*', 'sadmin/features*',
'sadmin/about-us*', 'sadmin/frontTestimonial*', 'sadmin/contactUs*') ? 'd-none' : ''); ?>">
<a class="nav-link p-0 <?php echo e(Request::is('sadmin/contactUs*') ? 'active' : ''); ?>"
href="<?php echo e(route('contact.contactus')); ?>"><?php echo e(__('messages.contact_us.contact_us')); ?></a>
</li>
<?php endif; ?>

<?php if(auth()->check() && auth()->user()->hasRole(App\Models\Role::ROLE_ADMIN)): ?>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('admin/dashboard*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('admin/dashboard*') ? 'active' : ''); ?>"
  href="<?php echo e(route('admin.dashboard')); ?>"><?php echo e(__('messages.dashboard')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('admin/vcards*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('admin/vcards*') ? 'active' : ''); ?>"
  href="<?php echo e(route('vcards.index')); ?>"><?php echo e(__('messages.vcards')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('admin/enquiries*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('admin/enquiries*') ? 'active' : ''); ?>"
  href="<?php echo e(route('enquiries.index')); ?>"><?php echo e(__('messages.enquiry')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('admin/appointments*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('admin/appointments*') ? 'active' : ''); ?>"
  href="<?php echo e(route('appointments.index')); ?>"><?php echo e(__('messages.appointments')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('admin/user-setting*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('admin/user-setting*') ? 'active' : ''); ?>"
  href="<?php echo e(route('user.setting.index')); ?>"><?php echo e(__('messages.settings')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('admin/manage-subscription*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('admin/manage-subscription*') ? 'active' : ''); ?>"
  href="<?php echo e(route('subscription.index')); ?>"><?php echo e(__('messages.subscription.manage_subscription')); ?></a>
</li>

<?php endif; ?>


<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('profile*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('profile*') ? 'active' : ''); ?>"
  href="<?php echo e(route('profile.setting')); ?>"><?php echo e(__('messages.user.profile_details')); ?></a>
</li>

<li class="nav-item position-relative mx-xl-3 mb-3 mb-xl-0 <?php echo e(!Request::is('admin/choose-payment-type*') ? 'd-none' : ''); ?>">
  <a class="nav-link p-0 <?php echo e(Request::is('admin/choose-payment-type*') ? 'active' : ''); ?>"
  href="<?php echo e(route('subscription.upgrade')); ?>"><?php echo e(__('messages.plans')); ?></a>
</li>
<?php /**PATH /home/maystudi/cardlyn.com/resources/views/layouts/sub_menu.blade.php ENDPATH**/ ?>
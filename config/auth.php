<?php

return [
  'defaults' => [
    'guard' => 'users',
    'passwords' => 'users',
  ],
  'guards' => [
    'users' => [
      'driver' => 'session',
      'provider' => 'users_provider',
    ],
    'admin' => [
      'driver' => 'session',
      'provider' => 'admin_users_provider',
    ],
  ],
  'providers' => [
    'users_provider' => [
      'driver' => 'eloquent',
      'model' => App\User::class,
    ],
    'admin_users_provider' => [
      'driver' => 'eloquent',
      'model' => App\Admin::class,
    ],
  ],
  'passwords' => [
    'users' => [
      'provider' => 'users_provider',
      'email' => 'user.auth.emails.password',
      'table' => 'multiauth_password_resets',
      'expire' => 60,
    ],
    'admin' => [
      'provider' => 'admin_users_provider',
      'email' => 'user.auth.emails.password',
      'table' => 'multiauth_password_resets',
      'expire' => 60,
    ],
  ],
  ];

<?php

return [
'defaults' => [
'guard' => 'user',
  'passwords' => 'user',
  ],
  'guards' => [
  'user' => [
  'driver' => 'session',
  'provider' => 'user',
  ],
  'admin' => [
  'driver' => 'session',
  'provider' => 'admin',
  ],
  ],
  'providers' => [
  'user' => [
  'driver' => 'eloquent',
  'model' => App\User::class,
  ],
  'admin' => [
  'driver' => 'eloquent',
  'model' => App\Admin::class,
  ],
  ],
  'passwords' => [
  'user' => [
  'provider' => 'user',
  'email' => 'user.auth.emails.password',
  'table' => 'multiauth_password_resets',
  'expire' => 60,
  ],
  'admin' => [
  'provider' => 'admin',
  'email' => 'user.auth.emails.password',
  'table' => 'multiauth_password_resets',
  'expire' => 60,
  ],
  ],
  ];

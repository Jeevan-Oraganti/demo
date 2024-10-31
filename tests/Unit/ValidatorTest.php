<?php

namespace Core;

it('validates a string', function(){
    expect(Validator::string('foobar'))->toBeTrue();
    expect(Validator::string(false))->toBeFalse();
    expect(Validator::string(''))->toBeFalse();
});

it('validates a string with a minimum length', function(){
    expect(\Core\Validator::string('foobar', 20))->toBeFalse();
});

it('Validates an email', function(){
    expect(Validator::email('foobar'))->toBeFalse();
    expect(Validator::email('foo@gmail.com'))->toBeTrue();
});
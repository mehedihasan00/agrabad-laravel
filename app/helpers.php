<?php
use Illuminate\Support\Str;

function countwords($sentence) {
    return Str::of($sentence)->wordCount();
}






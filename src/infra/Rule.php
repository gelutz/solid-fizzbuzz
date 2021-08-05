<?php

interface Rule {
    public function change( int $value ): string;
}

?>
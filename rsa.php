<?php
require 'vendor/autoload.php';

use phpseclib3\Crypt\RSA;

// Generate RSA Keys
function generate_rsa_keys() {
    // Generate RSA keys with 1024-bit size
    $private_key = RSA::createKey(1024);
    $public_key = $private_key->getPublicKey();

    // Convert keys to Base64 without line breaks
    return [
        'private_key' => base64_encode($private_key->toString('PKCS1')),
        'public_key' => base64_encode($public_key->toString('PKCS1'))
    ];
}

// RSA Encryption with Chunking
function rsa_encrypt($data, $public_key) {
    $public_key = RSA::load(base64_decode($public_key));
    $chunk_size = 117; // Maximum plaintext size for 1024-bit RSA with PKCS#1 padding
    $chunks = str_split($data, $chunk_size); // Split data into chunks

    $encrypted_chunks = array_map(function ($chunk) use ($public_key) {
        return base64_encode($public_key->encrypt($chunk));
    }, $chunks);

    return json_encode($encrypted_chunks); // Combine all encrypted chunks
}

// RSA Decryption with Chunking
function rsa_decrypt($encrypted_data, $private_key) {
    $private_key = RSA::load(base64_decode($private_key));
    $encrypted_chunks = json_decode($encrypted_data, true);

    $decrypted_chunks = array_map(function ($chunk) use ($private_key) {
        return $private_key->decrypt(base64_decode($chunk));
    }, $encrypted_chunks);

    return implode('', $decrypted_chunks); // Combine all decrypted chunks
}

?>
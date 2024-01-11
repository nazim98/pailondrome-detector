<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PalindromeController extends Controller
{
    public function index()
    {
        return view('palindrome.index');
    }

    public function detect(Request $request)
    {
        $word = $request->input('word');
        $isPalindrome = $this->isPalindrome($word);

        return view('palindrome.result', compact('word', 'isPalindrome'));
    }

    private function isPalindrome($word)
    {
        // Convert the word into an array of characters
        $characters = str_split($word);

        // Reverse the array
        $reversedCharacters = array_reverse($characters);

        // Convert the reversed array back into a string
        $reversedWord = implode('', $reversedCharacters);

        // Check if the original and reversed words are the same (case-insensitive)
        return strtolower($word) == strtolower($reversedWord);
    }
}

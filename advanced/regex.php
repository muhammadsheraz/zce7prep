<?php
# Meta Characters
/***
.   = Matches Any Character except line break
\s  = white space character
\S  = Not white space character [^\s]
\w  = Any Word character [A-za-z0-9_]
\W  = Not Any Word character [^\w]
\d  = Any Digit [0-9]
*/

# Quantifiers
/***
 * = Zero or More
 + = One or More
 ? = One or None
 */


# Position
/***
 ^ = Beginning of the line
 $ = End of the line
 \b = Word boundry
 */

$str = <<<STRING
Millions of people use Google to surf the internet. Whether you want to search specific news or any history topic altogether you can get anything in just a few clicks. With multiple themes and extensions are given on the platform, you can even create your own Google homepage to give it a more personalized outlook. Google Help is a support platform which is specifically designed for Google users to address their concerns regarding the same. Google Helpline Number is another way through which you can anytime talk to our professionals and discuss your problems. Why Google is important? Google offers unlimited access to varieties of features and products including email, Google photos, Google docs, Google calendar, Youtube, Google maps etc. You can also make use of beautiful Google themes given on the homepage. We are professionals at Google Helpline. Our Google help can effectively handle any type of your Google query. You just need to dial 18-446-592-999 and get to interact with some most talented customer care executives. Our Google Helpline Number is 18-446-592-999 (toll-free) You can dial (18)-446-592-999 from your phone and get in touch with our professionals in quick time. Those who are seeking instant assistance on their Google issues can ring us and connect with the officials within minutes. From installation issues to updating the browser, we have absolute solutions to almost every type of Google problems. Our Google Helpline Number is 18-446-592-999 (toll-free). Call us at our toll-free number and ask your questions. https://google-help-number.blogspot.com/2019/02/how-to-reach-google-help-18-446-592-999.html
STRING;

## Regex preg_match_all
//$matches = [];
//$pattern = '/\(?[\d]+\)?-\d{3}-\d{3}-\d{3}/';
//preg_match_all($pattern, $str, $matches, PREG_OFFSET_CAPTURE, 1095);
//
//echo "<pre>";
//print_r($matches);

## Rgex preg_replace
//$matches = [];
//$subject = 'a.b.cde.';
//$pattern = '/\w(?=\.)/';
//$counts = [];
//$rstr = preg_replace($pattern, '*',$subject, 1, $counts);
//
//echo $rstr;
//
//print_R($counts);

## Regex preg_quote
//$word = '*very*';
//$rstr = preg_quote($word);
//
//$string = "That path was *very* difficult to find";
//
//$replaced = preg_replace("/$rstr/", 'badly', $string);
//
//echo $replaced;


## Regex preg_last_error

//$pattern = '/^\w+/';  ## Correct regex is:  /\b\w\b/, I have omitted \b from the end
//$subject = 'Apple';
//echo preg_replace($pattern, 'Orange', $subject);
//
//$last_error = preg_last_error();
//
//var_dump($last_error); // will through PREG_INTERNAL_ERROR


## Regex preg_split
//$pattern = '/(-)/';
//$subject = 'Hello-Universe-';
//$words = preg_split($pattern, $subject, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_OFFSET_CAPTURE);
//
//var_dump($words);

## Regex preg_replace_callback
//$text[] = "April fools day is 04/01/2002\n";
//$text[] = "Last christmas was 12/24/2001\n";
//
//
//$text[] = "April fools day is 04/01/2018\n";
//$text[] = "Last christmas was 12/24/2017\n";
//
//$pattern = "/(\d{2}\/\d{2}\/)(\d{4})/";
//
//$callback = function ($match) {
//    return $match[1] . ($match[2] + 1);
//};
//
//$replaced_text = preg_replace_callback($pattern, $callback, $text);
//var_dump($replaced_text);
## Regex preg_replace_callback

$subject = 'Aaaaaa Bbb';

$r = preg_replace_callback_array(
    [
        '~[a]+~i' => function ($match) {
            echo strlen($match[0]), ' matches for "a" found', '<br>';
            echo "<br>";

            return $match[0];
        },
        '~[b]+~i' => function ($match) {
            echo strlen($match[0]), ' matches for "b" found', PHP_EOL, '<br>';
            return $match[0];
        }
    ],
    $subject
);


print_R($r);
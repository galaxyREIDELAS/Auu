<?php 
header('Access-Control-Allow-Origin: https://plug.dj'); 
header('Content-Type: text/json'); 
?>
{
    "room":                     "",
    "author":                   "",
    "css":                      "",
    "icon":                     "",
    "rules": {
        "allowAutorespond":     true,
        "allowAutowoot":        true,
        "allowAutojoin":        false,
        "allowAutograb":        true,
        "allowSmartVote":       true,
        "allowEmotes":          true,
        "allowShowingMehs":     true,
        "forceSmartVote":       false
    },
    "ccc": {
        "admin":                null,
        "ambassador":           null,
        "host":                 null,
        "cohost":               null,
        "manager":              null,
        "bouncer":              null,
        "rdj":                  null,
        "subscriber":           null,
        "friend":               null,
        "user":                 null
    },
    "images": {
        "background":           null,
        "playback":             null,
        "admin":                null,
        "ambassador":           null,
        "host":                 null,
        "cohost":               null,
        "manager":              null,
        "bouncer":              null,
        "rdj":                  null,
        "subscriber":           null
    }
}

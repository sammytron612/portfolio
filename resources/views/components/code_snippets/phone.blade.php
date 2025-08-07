



Import-Module activedirectory



    $users = get-aduser -filter * -SearchBase "OU=HQ,DC=kevinlwilson,DC=CO,DC=UK" -Properties *

    foreach ($user in $users) {

        $mobnum = $user.mobilephone -replace "\+44","" -replace "\(", "" -replace "\)", ""
        $officenum = $user.officephone -replace "\+44","" -replace "\(", "" -replace "\)", ""
        $fax = $user.fax -replace "\+44","" -replace "\(", "" -replace "\)", ""
        $homephone = $user.homephone -replace "\+44","" -replace "\(", "" -replace "\)", ""


        $user | set-aduser -MobilePhone $num -Fax $fax -OfficePhone $officenum -HomePhone $homephone


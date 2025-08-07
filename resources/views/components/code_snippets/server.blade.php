@verbatim
$hosts = "localhost"

 
$Error_System = Get-eventlog -computername $hosts -LogName system | where {$_.EntryType -eq "Error"} | where {$_.TimeGenerated -gt ((Get-Date).AddDays(-1))} `
| select EventID, Timegenerated, EntryType, Source, Message | convertto-html  -Fragment -PreContent "<H3><b> SYSTEM  LOG</H3>" | out-string
$warning_System = Get-eventlog -computername $hosts -LogName system | where {$_.EntryType -eq "Warning"} | where {$_.TimeGenerated -gt ((Get-Date).AddDays(-1))} `
| select EventID, Timegenerated, EntryType, Source, Message | convertto-html  -Fragment | out-string


$Error_App = Get-eventlog -computername $hosts -LogName application | where {$_.EntryType -eq "Error"} | where {$_.TimeGenerated -gt ((Get-Date).AddDays(-1))} `
| select EventID, Timegenerated, EntryType, Source, Message | convertto-html  -Fragment -PreContent "<H3><b> APPLICATION  LOG</H3>" | out-string
$warning_App = Get-eventlog -computername $hosts -LogName application | where {$_.EntryType -eq "Warning"} | where {$_.TimeGenerated -gt ((Get-Date).AddDays(-1))} `
| select EventID, Timegenerated, EntryType, Source, Message | convertto-html  -Fragment | out-string







$Pre = "<h1>Daily Eventlog Report on $hosts</h1>"


$Header = @"
<title>
Event Log on *
</title>
<style>
TABLE {border-width: 1px;border-style: solid;border-color: black;border-collapse: collapse;}
TH {font-weight: bold;border-width: 1px;padding: 3px;border-style: solid;border-color: black;background-color: #6495ED;}
TD {border-width: 1px;padding: 3px;border-style: solid;border-color: black;}
</style>
"@
   
$path = "C:\"+$hosts+".htm"
     
 ConvertTo-Html -As table -Head $header -PostContent $ErrorSystem,$warningSystem,$Error_App,$warning_App -PreContent $pre | out-file $path -Force
 @endverbatim
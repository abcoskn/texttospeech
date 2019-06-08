# Text To Speech API Documentation






POST URL: https://ttsmp3.com/makemp3.php

# Post Parameters

| Parameter  | Value  | Necessary |
| ---------- | ------ | --------- |
| msg	| Text what will convert to speech	| Yes |
| lng |	Speech Language |	Yes |
| source |	ttsmp3 |	Yes |


# Speech Languages and Values

| Language  | Value  |
| --------- | ------ |
| Arabic / Zeina | Zeina |
| Australian English / Nicole | Nicole |
| Australian English / Russell | Russell |
| Brazilian Portuguese / Ricardo | Ricardo |
| Brazilian Portuguese / Vitória | Vitoria |
| British English / Emma | Emma |
| British English / Amy | Amy |
| British English / Brian | Brian |
| Canadian French / Chantal | Chantal |
| Castilian Spanish / Conchita | Conchita |
| Castilian Spanish / Lucia | Lucia |
| Castilian Spanish / Enrique | Enrique |
| Chinese Mandarin / Zhiyu | Zhiyu |
| Danish / Naja | Naja |
| Danish / Mads | Mads |
| Dutch / Lotte | Lotte |
| Dutch / Ruben | Ruben |
| French / Mathieu | Mathieu |
| French / Céline | Celine |
| French / Léa | Lea |
| German / Hans | Hans |
| German / Marlene | Marlene |
| German / Vicki | Vicki |
| Icelandic / Karl | Karl |
| Icelandic / Dóra | Dora |
| Indian English / Raveena | Raveena |
| Indian English / Aditi | Aditi |
| Italian / Giorgio | Giorgio |
| Italian / Carla | Carla |
| Italian / Bianca | Bianca |
| Japanese / Mizuki | Mizuki |
| Japanese / Takumi | Takumi |
| Korean / Seoyeon | Seoyeon |
| Mexican Spanish / Mia | Mia |
| Norwegian / Liv | Liv |
| Polish / Maja | Maja |
| Polish / Jan | Jan |
| Polish / Jacek | Jacek |
| Polish / Ewa | Ewa |
| Portuguese / Cristiano | Cristiano |
| Portuguese / Inês | Ines |
| Romanian / Carmen | Carmen |
| Russian / Maxim | Maxim |
| Russian / Tatyana | Tatyana |
| Swedish / Astrid | Astrid |
| Turkish / Filiz | Filiz |
| US English / Ivy | Ivy |
| US English / Joanna | Joanna |
| US English / Joey | Joey |
| US English / Justin | Justin |
| US English / Kendra | Kendra |
| US English / Kimberly | Kimberly |
| US English / Matthew | Matthew |
| US English / Salli | Salli |
| US Spanish / Penélope | Penelope |
| US Spanish / Miguel | Miguel |
| Welsh / Gwyneth | Gwyneth |
Welsh English / Geraint |	Geraint |

# Response Parameters

| Parameter  | Value  |
| ---------- | ------ |
| Error | Error Code. Default is 0 |
| Speaker | Language Value |
| Cached | İf it is cached  |
| Text | Text what converted to speech |
| ARRSIZE | Array Size |
| URL | Speech file url |
| MP3 | Speech file name |



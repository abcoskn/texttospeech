import requests

payload = {'msg': 'Merhaba', 'lng': 'Filiz','source':'ttsmp3'}

r = requests.post("https://ttsmp3.com/makemp3.php", data=payload)

print(r.content)

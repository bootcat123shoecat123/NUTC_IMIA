from flask import Flask, request, abort
from linebot import (LineBotApi, WebhookHandler)
from linebot.exceptions import (InvalidSignatureError, LineBotApiError)
from linebot.models import *
import pymysql
import schedule
import time
# import sys
# input=sys.argv[1]


# Open database connection
db = pymysql.connect(
    host="localhost",
    user="root",
    password="",
    database="linebot")
# prepare a cursor object using cursor() method
cursor = db.cursor()

app = Flask(__name__)
line_bot_api = LineBotApi('imzwbdnWwai8/UeyDB+P0xix/PsQZ177WNAmVIyPVaJMvRStdih9kZyniAHJAjMn2v+yU4dqITNccEpYqDPaRYsVLbHNXux9cRD7KTzIrrdEOFiMzlJVaxGhvYEgfMnG/gecF00JidNQbm6B6tqMqQdB04t89/1O/w1cDnyilFU=')
handler = WebhookHandler('47ddc2eba4976b48fa2f14375032a147')

@app.route("/", methods=['POST'])
def callback():
    signature = request.headers['X-Line-Signature']
    body = request.get_data(as_text=True)
    print("Request body: " + body, "Signature: " + signature)
    try:
        handler.handle(body, signature)
    except InvalidSignatureError:
       abort(400)
    return 'OK'

db.ping()    
sql="SELECT COUNT(*) FROM `question` WHERE help=3"
cursor.execute(sql)
qnum=cursor.fetchone()
sql="SELECT * FROM `question` WHERE help=3"
cursor.execute(sql)
for i in range(qnum[0]):
    question=cursor.fetchone()
    line_bot_api.push_message(question[0],TextSendMessage(text="<真人客服回應>\n問題："+question[1]+"\n回覆："+question[3]))
sql="UPDATE `question` SET help=4 WHERE help=3"
cursor.execute(sql)
db.commit()


if __name__ == '__main__':
    while True:
        schedule.run_pending()
        time.sleep(1)

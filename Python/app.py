from tfidf import cal
from chatbot import chatbot
from flask import Flask, render_template, request, redirect
from flask_cors import CORS
from urllib.parse import unquote
import re
from recommend import give_recommendations, getIndex

app = Flask(__name__)
CORS(app)
app.static_folder = 'static'

#chatroom of chatbot, only for testing
@app.route("/")
def home():
    return render_template("chatroom.html")

#chat request
@app.route("/get")
def get_bot_response():
    userText = request.args.get('msg')
    return str(chatbot.get_response(userText))


#for recommended system
@app.route("/recommend") 
def getcookie():
    viewMovie = unquote(request.cookies.get('viewMovie')).replace("[","").replace("]","")
    likeMovie = unquote(request.cookies.get('likeMovie')).replace("[","").replace("]","").replace("\\","")
    viewMovie = re.findall(r'"([^"]*)"', viewMovie)
    likeMovie = re.findall(r'"([^"]*)"', likeMovie)
    max = cal(viewMovie,likeMovie)
    index = getIndex(max)
    rs = give_recommendations(index)
    print(rs['Movies'])
    print(rs['Movies'][0])
    #this url is a absolute path
    return redirect("http://127.0.0.1/FYP/HTML/recommend.php?rMovie="+ rs['Movies'][0] + "&vMovie=" + max, code=302)

if __name__ == "__main__":
    app.run()
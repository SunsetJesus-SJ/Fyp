from chatbot import chatbot
from flask import Flask, render_template, request
from flask_cors import CORS

app = Flask(__name__)
CORS(app)
app.static_folder = 'static'

@app.route("/")
def home():
    return render_template("chatroom.html")

@app.route("/get")
def get_bot_response():
    userText = request.args.get('msg')
    return str(chatbot.get_response(userText))

if __name__ == "__main__":
    app.run()
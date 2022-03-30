from chatterbot import ChatBot
from chatterbot.trainers import ListTrainer
from chatterbot.trainers import ChatterBotCorpusTrainer
import logging
logger = logging.getLogger()
logger.setLevel(logging.CRITICAL)

# Creating ChatBot Instance
# chatbot = ChatBot("MovieWebsiteChatBot", read_only=True)
# read_only mean no to learning from input
chatbot = ChatBot(
    'MovieWebsiteChatBot',
    read_only=True,

    logic_adapters=[
        'chatterbot.logic.MathematicalEvaluation',
        'chatterbot.logic.BestMatch',
        {
            'import_path': 'chatterbot.logic.BestMatch',
            'default_response': 'I am sorry, i do not understand. Would you want to raise the problem to our staff?',
            'maximum_similarity_threshold': 0.9
        }
    ]
)
training_data_quesans = open('./training_data/ques_ans.txt').read().splitlines()
training_data_personal = open('./training_data/personal_ques.txt').read().splitlines()

training_data = training_data_quesans + training_data_personal

trainer = ListTrainer(chatbot)
trainer.train(training_data)


# Training with English Corpus Data
trainer_corpus = ChatterBotCorpusTrainer(chatbot)

trainer_corpus.train(
    './training_data/websiteNavigation.yml'
)

chatbot.get_response('Hi, I need help.')
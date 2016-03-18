from flask import Flask
import nltk
import json

app = Flask(__name__)

@app.route("/<test>")
def hello(test):
	text = nltk.word_tokenize(test)
	final_output = nltk.pos_tag(text)
	print final_output
	dict_value = dict(final_output)
	final_data = json.dumps(dict_value)

	print final_data
	return final_data
    


if __name__ == "__main__":
    app.run()
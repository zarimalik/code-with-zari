import pyttsx3
import speech_recognition as sr
import os

def speak(text):
    engine = pyttsx3.init()
    engine.say(text)
    engine.runAndWait()

def listen():
    recognizer = sr.Recognizer()
    with sr.Microphone() as source:
        print("Listening...")
        recognizer.adjust_for_ambient_noise(source, duration=1)
        audio = recognizer.listen(source)

    try:
        print("Recognizing...")
        command = recognizer.recognize_google(audio).lower()
        print("You said:", command)
        return command
    except sr.UnknownValueError:
        print("Could not understand audio.")
        return ""
    except sr.RequestError as e:
        print("Error fetching results; {0}".format(e))
        return ""

if __name__ == "__main__":
    while True:
        command = listen()

        if "open" in command:
            speak("Opening laptop.")
            os.system("start")

        elif "shutdown" in command:
            speak("Shutting down laptop.")
            os.system("shutdown /s /t 0")

        elif "exit" in command:
            speak("Exiting the program.")
            break

        else:
            speak("Sorry, I didn't understand that command.")

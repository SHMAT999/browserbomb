import webbrowser
import time

main_logo = '''
█▀▄ █▀▀▄ ▄▀▄ █░░░█ ▄▀▀ █▀▀ █▀▀▄     █▀▄ ▄▀▄ █▄░▄█ █▀▄ 
█▀█ █▐█▀ █░█ █░█░█ ░▀▄ █▀▀ █▐█▀     █▀█ █░█ █░█░█ █▀█ 
▀▀░ ▀░▀▀ ░▀░ ░▀░▀░ ▀▀░ ▀▀▀ ▀░▀▀     ▀▀░ ░▀░ ▀░░░▀ ▀▀░

╔══╗╔═╦╗     ╔══╗╔╗╔╗╔═╦═╗╔══╗╔══╗
║╔╗║╚╗║║     ║══╣║╚╝║║║║║║║╔╗║╚╗╔╝
║╔╗║╔╩╗║     ╠══║║╔╗║║║║║║║╠╣║─║║─
╚══╝╚══╝     ╚══╝╚╝╚╝╚╩═╩╝╚╝╚╝─╚╝─
'''

print(main_logo)


website = input("Укажите сайт для использования (не обязательно:")
while True:
    try:
        num = int(input("Укажите кол-во открытий вкладок: "))
    except ValueError:
        print("Простите, запрос не понятен")
        continue
    else:
        break
time.sleep(0)
for _ in range(num):
        webbrowser.open('http://{}'.format(website))
        time.sleep(0.1)

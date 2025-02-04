import smtplib
import sys
from email.mime.text import MIMEText

def send_email(to_email, code):
    sender_email = "seuemail@gmail.com"
    sender_password = "suasenha"
    
    msg = MIMEText(f"Seu código de verificação é {code}")
    msg['Subject'] = "Código de Verificação"
    msg['From'] = sender_email
    msg['To'] = to_email

    with smtplib.SMTP_SSL("smtp.gmail.com", 465) as server:
        server.login(sender_email, sender_password)
        server.sendmail(sender_email, to_email, msg.as_string())

if __name__ == "__main__":
    send_email(sys.argv[1], sys.argv[2])

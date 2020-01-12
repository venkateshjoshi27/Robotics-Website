import smtplib
import sys
#print(sys.argv[1])
s = smtplib.SMTP('smtp.gmail.com',587)
s.ehlo()
s.starttls()
s.login('sendermailid@gmail.com','senderpassword')  #Note this mail id does not exist and change it according to user this is just an example
recv = 'receivermailid@gmail.com' #Note this mail id does not exist and change it according to user this is just an example
msg = sys.argv[1]
z = sys.argv[2]
msg = "Feedback by- "+z+" \nMessage: "+msg
#msg = ("From: %s\r\nTo: %s\r\n\r\n" % (fromaddr, ", ".join(toaddrs)))
#msg = ' " ' + msg +' " '
print(msg)
s.sendmail('echrob9formail@gmail.com',recv,msg)
s.quit()
exit()



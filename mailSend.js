const nodemailer = require('nodemailer');
// create reusable transporter object using the default SMTP transport
let transporter = nodemailer.createTransport({
    host: 'smtp.gmail.com',
    port: 465,
    secure: true, // true for 465, false for other ports
    auth: {
        user: 'your_email@gmail.com', // your email address
        pass: 'your_password' // your email password
    }
});
// setup email data with unicode symbols
let mailOptions = {
    from: '"Your Name" <your_email@gmail.com>', // sender address
    to: 'recipient_email@example.com', // list of receivers
    subject: 'Subject of your email', // Subject line
    text: 'Plain text body of the email', // plain text body
    html: '<p>HTML version of the email body</p>' // html body
};
// send mail with defined transport object
transporter.sendMail(mailOptions, (error, info) => {
    if (error) {
        return console.log(error);
    }
    console.log('Message sent: %s', info.messageId);
});
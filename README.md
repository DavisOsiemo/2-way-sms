# 2-way-sms - Educate a target group about Corona virus
A very simple PHP (sorry guys) app showing how you can educate a target group about Corona Virus using AT's 2-way SMS

- Assuming you have an AT account, go to the sandbox app, under SMS, create a shortCode. Could be 4 or 5 digits
- Create shortCode link: https://account.africastalking.com/apps/sandbox/sms/shortcodes/create
- Then click this link: https://www.000webhost.com/ and sign in with Google/FB. This is a free, web hosting site
- Create a website and name it.
- You can find a link to your website by clicking "my sites" tab
- Make sure to have a folder named 'vendor' in the root directory 'public_html' within your website. It holds packages required by the app including AT’s PHP SDK
- Download vendor here: https://tinyurl.com/wpyxgyj OR use the one shared in this repo
- Create a file called incomingsms.php and paste the PHP code shared in this repo. This is your callback logic
- Configure a callback URL in your sandbox app under SMS Callback Urls -> Incoming messages
- My callback URL is https://davisossy.000webhostapp.com/incomingmessage.php , yours will be different!
- Time to test on our simulator: https://simulator.africastalking.com:1517/
- FYI, an android version of the simulator is available
- On the simulator, press 'SMS icon' -> 'create new message' -> 'enter the shortCode you created on the sandbox app and type in "Corona"
- Test for the other keywords that we created in our code and observe the responses
- Done! Our 2-way SMS works
- There’s 1001 ways to improve this app. Feel free to poke it in your free time. Happy coding 🙂️

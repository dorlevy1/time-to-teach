<?php
require_once 'Calendar.php';
require 'vendor/autoload.php';
class quick{
  public $event;
  public $service;
  public $client;
  function __construct(){
  }
  /**
   * Returns an authorized API client.
   @return Google_Client
   */
  
  function getClient()
  {
    $client = new Google_Client();
    $client->setApplicationName('Time To Teach');
    $client->setScopes(Google_Service_Calendar::CALENDAR);
    $client->setAuthConfig('credentials.json');
    $client->setAccessType('offline');
    $client->setPrompt('select_account consent');
    
    // Load previously authorized token from a file, if it exists.
    // The file token.json stores the user's access and refresh tokens, and is
    // created automatically when the authorization flow completes for the first
    // time.
    $tokenPath = 'token.json';
    if (file_exists($tokenPath)) {
      $accessToken = json_decode(file_get_contents($tokenPath), true);
      $client->setAccessToken($accessToken);
    }
    
    // If there is no previous token or it's expired.
    if ($client->isAccessTokenExpired()) {
      // Refresh the token if possible, else fetch a new one.
      if ($client->getRefreshToken()) {
        $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
      } else {
        // Request authorization from the user.
        $authUrl = $client->createAuthUrl();
        printf("Open the following link in your browser:\n%s\n", $authUrl);
        print 'Enter verification code: ';
        $authCode = trim(fgets(STDIN));
        
        // Exchange authorization code for an access token.
        $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);
        $client->setAccessToken($accessToken);
        
        // Check to see if there was an error.
        if (array_key_exists('error', $accessToken)) {
          throw new Exception(join(', ', $accessToken));
        }
      }
      // Save the token to a file.
      if (!file_exists(dirname($tokenPath))) {
        mkdir(dirname($tokenPath), 0700, true);
      }
      file_put_contents($tokenPath, json_encode($client->getAccessToken()));
    }
    return $client;
  }
  
  function callClient(){

    // Get the API client and construct the service object.
    $client = self::getClient();
    $service = new Google_Service_Calendar($client);
    
    // Print the next 1 event on the user's calendar.
    $calendarId = 'primary';
    $optParams = array(
      'maxResults' => 1,
      'orderBy' => 'startTime',
      'singleEvents' => true,
      'timeMin' => date('c'),
    );
    $results = $service->events->listEvents($calendarId, $optParams);
    $events = $results->getItems();
    
  }
  // Refer to the PHP quickstart on how to setup the environment:
  // https://developers.google.com/calendar/quickstart/php
  // Change the scope to Google_Service_Calendar::CALENDAR and delete any stored
  // credentials.
  
    function insertEvent($title,$etc,$start,$end,$calendarId){

    $event = new Google_Service_Calendar_Event(array(
      'summary' => $title,
      'location' => 'Holon',
      'description' => $etc,
      'start' => array(
        'dateTime' => $start,
        'timeZone' => 'Asia/Jerusalem',
      ),
      'end' => array(
        'dateTime' => $end,
        'timeZone' => 'Asia/Jerusalem',
      ),
      'recurrence' => array(
        'RRULE:FREQ=DAILY;COUNT=1'
      ),
      'attendees' => array(
        array('email' => 'ddl105095@gmail.com'),
        array('email' => 'r.benitah1@gmail.com'),
      ),
      'reminders' => array(
        'useDefault' => FALSE,
        'overrides' => array(
          array('method' => 'email', 'minutes' => 24 * 60),
          array('method' => 'popup', 'minutes' => 10),
        ),
      ),
    ));
    $client = self::getClient();
    $service = new Google_Service_Calendar($client);
     $event = $service->events->insert($calendarId, $event);
      
      printf('Event created: ');
      print '<br>';
      printf($event->htmlLink);
    }
    // header('Location: /timetoteach/view/dashboard/my_calendar.php');
    function fetch(){

      if (empty($events)) {
        print "No upcoming events found.\n";
      } else {
        // print " <br>Upcoming events: <br>";
        foreach ($events as $event) {
          $start = $event->start->dateTime;
          $end = $event->end->dateTime;
          if (empty($start)) {
            $start = $event->start->date;
          }
          // var_dump(count($events));
          if($events > count($events)){
            // $calendar->InsertNewClassGoogle($event->getSummary(),$event->id,$start,$end);
          }
          // printf("%s %s (%s)\n", $event->getSummary(), $event->getDescription(), $start);
          //     print'<br>';
        }
      }
      }
    }
    ?>
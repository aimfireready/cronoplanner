<?php
/*------------------------------------------------
            INSERT OR UPDATE AN EVENT
--------------------------------------------------*/
function upsertEvent($cronofy, object $event)
{
  $params = array(
    'calendar_id' => $event['calendarID'],
    'event_id' => $event['id'],
    'summary' => $event['name'],
    'description' => $event['description'],
    'start' => $event['startTime'],
    'end' => $event['endTime']
  );
  $new_event = $cronofy->upsert_event($params);
  return $new_event;
}

/*------------------------------------------------
                DELETE AN EVENT
--------------------------------------------------*/
function deleteEvent($cronofy, object $event)
{
  $params = array(
    'calendar_id' => $event['calendarID'],
    'event_id' => $event['id']
  );
  $deleteEvent = $cronofy->delete_event($params);
  return $deleteEvent;
}

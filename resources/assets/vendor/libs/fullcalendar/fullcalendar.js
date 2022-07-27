import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';
import listPlugin from '@fullcalendar/list';
import timegridPlugin from '@fullcalendar/timegrid';
import timelinePlugin from '@fullcalendar/timeline';

const calendarPlugins = {
  dayGrid: dayGridPlugin,
  interaction: interactionPlugin,
  list: listPlugin,
  timeGrid: timegridPlugin,
  timeline: timelinePlugin
};

export { Calendar, calendarPlugins };

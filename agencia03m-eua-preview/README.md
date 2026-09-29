# Agência 03M — U.S. Preview

Landing page preview for the Agência 03M U.S. AI Search offer.

## Vercel

Import the repository `LilNomad01/chat`, select branch `agencia03m-eua-preview`, and set:

- Root Directory: `agencia03m-eua-preview`
- Framework Preset: Other
- Node.js: 20+

## Google Calendar + Google Meet booking

The audit form now lets visitors choose an available meeting date/time. Availability is checked against Google Calendar, the selected slot is revalidated before booking, and the event is created with the visitor as an attendee and a Google Meet conference.

Required Vercel environment variables:

- `GOOGLE_CLIENT_ID`
- `GOOGLE_CLIENT_SECRET`
- `GOOGLE_REFRESH_TOKEN`

Recommended:

- `GOOGLE_CALENDAR_ID=primary`
- `GOOGLE_CALENDAR_TIMEZONE=America/Sao_Paulo`
- `SUPPORT_EMAIL=contato@agencia03m.com.br`

Optional scheduling controls:

- `MEETING_START_HOUR=9`
- `MEETING_END_HOUR=18`
- `MEETING_DURATION_MINUTES=30`
- `MEETING_SLOT_STEP_MINUTES=30`
- `MEETING_MIN_LEAD_MINUTES=120`
- `MEETING_HORIZON_DAYS=30`

Do not commit Google OAuth credentials to GitHub. Add them only as Vercel Environment Variables.

## Booking endpoint

- `GET /api/schedule?date=YYYY-MM-DD&timeZone=America/New_York` returns available slots.
- `POST /api/schedule` rechecks availability and creates the Calendar event + Google Meet invitation.

Questions shown to visitors: `contato@agencia03m.com.br`.

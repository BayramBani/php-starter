@component('mail::message')
  # Dev Note Message

  | | |
  |-|-|
  | Name | {{$mailData['name']}} |
  | Email | {{$mailData['email']}} |
  | Message | {{$mailData['body']}} |

  @component('mail::button', ['url' => 'https://bayrambani.netlify.app/'])
    Go
  @endcomponent

  Thanks,<hr>
  {{ config('app.name') }}
@endcomponent

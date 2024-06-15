<div {{ $attributes->merge(['class' => 'hover:text-gray-900 dark:hover:text-red-900']) }}>
    <a href="{{ $href }}" class="inline-flex">
        <div class="me-2">
            {{$text}}
        </div>
        <svg class="hover:stroke-2 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
             stroke-width="1" stroke="currentColor">
                <path
                    d="M12 4V14M12 14L9.50008 11.5M12 14L14.5001 11.5M8.50008 14H8.00008C7.05727 14 6.58587 14 6.29298 14.2929C6.00008 14.5858 6.00008 15.0572 6.00008 16V18C6.00008 18.9428 6.00008 19.4142 6.29298 19.7071C6.58587 20 7.05727 20 8.00008 20H16.0001C16.9429 20 17.4143 20 17.7072 19.7071C18.0001 19.4142 18.0001 18.9428 18.0001 18V16C18.0001 15.0572 18.0001 14.5858 17.7072 14.2929C17.4143 14 16.9429 14 16.0001 14H15.5001"
                    stroke="#464455" stroke-linecap="round" stroke-linejoin="round"></path>
            </g>
        </svg>
    </a>
</div>

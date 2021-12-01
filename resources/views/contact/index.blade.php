<x-layout>
    <x-setting heading="Messages">
        <div class="flex flex-col">
            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-200">
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($contacts as $con)
                                    <tr>
                                            <div class="flex items-center">
                                                <div class="text-sm font-medium text-gray-900">
                                                       From: {{ $con->email }} <br> Sent: {{ $con->created_at }}
                                                </div>
                                            </div>
                                        </tr><br>
                                        <tr>
                                            <aclass="text-blue-500 hover:text-blue-600 pull-right">{{ $con->message }}</a>
                                    </tr>
                                    <hr>
                                    <br>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </x-setting>
</x-layout>

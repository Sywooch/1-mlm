<?php

$data='yJhY3Rpb24iOiJwYXkiLCJwYXltZW50X2lkIjoxMDE3MzExMTYsInN0YXR1cyI6IndhaXRfYWNjZXB0IiwidmVyc2lvbiI6MywidHlwZSI6ImJ1eSIsInB1YmxpY19rZXkiOiJpNzA5NTk0NDU2MzgiLCJhY3FfaWQiOjQxNDk2Mywib3JkZXJfaWQiOiIyMDE1MTIwOTEzNDAyNDI4NTM3OSIsImxpcXBheV9vcmRlcl9pZCI6IjEwMDkyOHUxNDQ5NjYxNDExMzgzNDAwIiwiZGVzY3JpcHRpb24iOiJ1c2VySUQ6Mjg0MCIsInNlbmRlcl9waG9uZSI6IjM4MDY3MjMzNjc1NSIsInNlbmRlcl9jYXJkX21hc2syIjoiNDE0OTQ5Kjg1Iiwic2VuZGVyX2NhcmRfYmFuayI6InBiIiwic2VuZGVyX2NhcmRfY291bnRyeSI6ODA0LCJpcCI6IjkyLjYwLjE4Ny41IiwiYW1vdW50IjoxLjAsImN1cnJlbmN5IjoiVUFIIiwic2VuZGVyX2NvbW1pc3Npb24iOjAuMCwicmVjZWl2ZXJfY29tbWlzc2lvbiI6MC4wMywiYWdlbnRfY29tbWlzc2lvbiI6MC4wLCJhbW91bnRfZGViaXQiOjEuMCwiYW1vdW50X2NyZWRpdCI6MS4wLCJjb21taXNzaW9uX2RlYml0IjowLjAsImNvbW1pc3Npb25fY3JlZGl0IjowLjAzLCJjdXJyZW5jeV9kZWJpdCI6IlVBSCIsImN1cnJlbmN5X2NyZWRpdCI6IlVBSCIsInNlbmRlcl9ib251cyI6MC4wLCJhbW91bnRfYm9udXMiOjAuMCwiYXV0aGNvZGVfZGViaXQiOiI1MTE4NzYiLCJycm5fZGViaXQiOiIwMDAyODQ4MjMzNTEiLCJtcGlfZWNpIjoiNyIsInRyYW5zYWN0aW9uX2lkIjoxMDE3MzExMTZ9';

$dtArr=array (
    'signature' => 'MKGJEsFEuWuaQVHxdFjFUPtUBhU=',
    'data' => 'eyJhY3Rpb24iOiJwYXkiLCJwYXltZW50X2lkIjoxMDE3NDk4NjgsInN0YXR1cyI6IndhaXRfYWNjZXB0IiwidmVyc2lvbiI6MywidHlwZSI6ImJ1eSIsInB1YmxpY19rZXkiOiJpNzA5NTk0NDU2MzgiLCJhY3FfaWQiOjQxNDk2Mywib3JkZXJfaWQiOiIxMDEtMTAxLTEwMSIsImxpcXBheV9vcmRlcl9pZCI6IjEwMDkyOHUxNDQ5NjYzNzk5OTk1OTQ4IiwiZGVzY3JpcHRpb24iOiJ1c2VySUQ6Mjg0MCIsInNlbmRlcl9waG9uZSI6IjM4MDY3MjMzNjc1NSIsInNlbmRlcl9jYXJkX21hc2syIjoiNDE0OTQ5Kjg1Iiwic2VuZGVyX2NhcmRfYmFuayI6InBiIiwic2VuZGVyX2NhcmRfY291bnRyeSI6ODA0LCJpcCI6IjkyLjYwLjE4Ny41IiwiYW1vdW50IjowLjAxLCJjdXJyZW5jeSI6IlVBSCIsInNlbmRlcl9jb21taXNzaW9uIjowLjAsInJlY2VpdmVyX2NvbW1pc3Npb24iOjAuMCwiYWdlbnRfY29tbWlzc2lvbiI6MC4wLCJhbW91bnRfZGViaXQiOjAuMDEsImFtb3VudF9jcmVkaXQiOjAuMDEsImNvbW1pc3Npb25fZGViaXQiOjAuMCwiY29tbWlzc2lvbl9jcmVkaXQiOjAuMCwiY3VycmVuY3lfZGViaXQiOiJVQUgiLCJjdXJyZW5jeV9jcmVkaXQiOiJVQUgiLCJzZW5kZXJfYm9udXMiOjAuMCwiYW1vdW50X2JvbnVzIjowLjAsImF1dGhjb2RlX2RlYml0IjoiNzEzNDAzIiwicnJuX2RlYml0IjoiMDAwMjg0ODQ5MTE0IiwibXBpX2VjaSI6IjciLCJ0cmFuc2FjdGlvbl9pZCI6MTAxNzQ5ODY4fQ==', );




$dt=base64_decode( $dtArr['data'] );

echo "<pre>";
print_r(
    json_decode($dt)->order_id
    );
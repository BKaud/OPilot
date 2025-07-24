// Program.cs

var builder = WebApplication.CreateBuilder(args);

// 1) Add controllers
builder.Services.AddControllers();

// 2) CORS policy – allow both localhost and 127.0.0.1 on 5500
builder.Services.AddCors(options =>
{
    options.AddPolicy("DevPolicy", policy =>
    {
        policy
          .WithOrigins("http://127.0.0.1:5500") // your UI’s URL
          .AllowAnyMethod()
          .AllowAnyHeader();
    });
});


var app = builder.Build();

// 3) Enable CORS and map controllers
app.UseCors("DevPolicy");
app.MapControllers();

app.Run();

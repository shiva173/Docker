FROM python:3
RUN groupadd -r uwsgi && useradd -r -g uwsgi uwsgi
RUN pip install Flask uwsgi requests
WORKDIR /app
COPY /app /app
COPY cmd.sh /
EXPOSE 9090 9191
USER uwsgi
#CMD ["python", "app.py"]
CMD ["/cmd.sh"]
